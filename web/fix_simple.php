<?php
// fix_docker.php - Script para tu entorno Docker específico
echo "=== LIMPIEZA SEGURA PARA DOCKER ===\n\n";

// CONFIGURACIÓN DE TU DOCKER ( según docker-compose.yml )
$db_config = [
    'host' => 'localhost',
    'name' => 'drupal',          // ← MYSQL_DATABASE: drupal
    'user' => 'myuser',          // ← MYSQL_USER: myuser
    'pass' => 'Password123',     // ← MYSQL_PASSWORD: Password123
];

// Módulos problemáticos a eliminar
$modulos_problematicos = [
    'ckeditor5_plugin_pack', 'ckeditor5_plugin_pack_auto_image',
    'ckeditor5_plugin_pack_bookmark', 'ckeditor5_plugin_pack_emoji',
    'ckeditor5_plugin_pack_find_and_replace', 'ckeditor5_plugin_pack_font',
    'ckeditor5_plugin_pack_free_wproofreader', 'ckeditor5_plugin_pack_highlight',
    'ckeditor5_plugin_pack_indent_block', 'ckeditor5_plugin_pack_link_attributes',
    'ckeditor5_plugin_pack_page_break', 'ckeditor5_plugin_pack_paste_markdown',
    'ckeditor5_plugin_pack_select_all', 'ckeditor5_plugin_pack_templates',
    'ckeditor5_plugin_pack_text_transformation', 'ckeditor5_plugin_pack_todo_document_list',
    'ckeditor5_plugin_pack_word_count', 'ckeditor5_premium_features',
    'ckeditor5_premium_features_ai_assistant', 'ckeditor5_premium_features_collaboration',
    'ckeditor5_premium_features_export_pdf', 'ckeditor5_premium_features_export_word',
    'ckeditor5_premium_features_fullscreen', 'ckeditor5_premium_features_import_word',
    'ckeditor5_premium_features_mentions', 'ckeditor5_premium_features_multi_level_lists',
    'ckeditor5_premium_features_notifications', 'ckeditor5_premium_features_productivity_pack',
    'ckeditor5_premium_features_source_editing_enhanced', 'ckeditor5_premium_features_version_override',
    'ckeditor5_premium_features_wproofreader', 'sitemap'
];

echo "🔍 Verificando conexión a BD Docker...\n";
echo "BD: {$db_config['name']}\n";
echo "Usuario: {$db_config['user']}\n";

try {
    // Conectar a BD Docker
    $pdo = new PDO("mysql:host={$db_config['host']};dbname={$db_config['name']};charset=utf8", 
                  $db_config['user'], $db_config['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "✅ Conectado a BD Docker exitosamente!\n";
    
    // Leer configuración actual
    $stmt = $pdo->query("SELECT data FROM config WHERE name = 'core.extension'");
    $config_actual = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$config_actual) {
        echo "❌ No se encontró core.extension en la configuración\n";
        exit;
    }
    
    $data = unserialize($config_actual['data']);
    echo "✅ Configuración leída. Módulos instalados: " . count($data['module']) . "\n";
    
    // MOSTRAR módulos existentes antes de eliminar
    echo "\n🔍 Módulos problemáticos encontrados:\n";
    $encontrados = [];
    foreach ($modulos_problematicos as $modulo) {
        if (isset($data['module'][$modulo])) {
            $encontrados[] = $modulo;
            echo "  - $modulo\n";
        }
    }
    
    if (empty($encontrados)) {
        echo "✅ No se encontraron módulos problemáticos en la configuración\n";
    } else {
        echo "\n🚀 Eliminando " . count($encontrados) . " módulos problemáticos...\n";
        
        // Crear tabla de backup si no existe
        $pdo->exec("CREATE TABLE IF NOT EXISTS config_backup LIKE config");
        $pdo->exec("INSERT INTO config_backup SELECT * FROM config WHERE name = 'core.extension'");
        echo "✅ Backup creado en tabla config_backup\n";
        
        // Eliminar módulos problemáticos
        foreach ($encontrados as $modulo) {
            unset($data['module'][$modulo]);
            echo "  - Eliminado: $modulo\n";
        }
        
        // Actualizar configuración
        $nueva_data = serialize($data);
        $update_stmt = $pdo->prepare("UPDATE config SET data = ? WHERE name = 'core.extension'");
        $update_stmt->execute([$nueva_data]);
        
        echo "\n✅✅✅ ELIMINACIÓN COMPLETADA:\n";
        echo "Módulos eliminados: " . count($encontrados) . "\n";
        
        // Limpiar caché de configuración
        $pdo->exec("DELETE FROM cache_config");
        echo "✅ Caché limpiado\n";
    }
    
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage() . "\n";
    echo "\n🔧 SOLUCIÓN: Asegúrate que el contenedor MySQL esté ejecutándose:\n";
    echo "   docker-compose up -d db\n";
    echo "   Verifica con: docker-compose ps\n";
}

echo "\n=== PROCESO COMPLETADO ===\n";
echo "📋 Pasos siguientes:\n";
echo "1. mkdir config\\sync\n";
echo "2. Visitar: http://localhost:8080/update.php\n";
echo "3. Revisar que no haya errores\n";
?>