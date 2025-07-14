<?php
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);
$content = strtolower($input['post_content'] ?? '');

if (!$content) {
    echo json_encode(['error' => 'No post content provided']);
    exit;
}

$suggestions = [];

if (strpos($content, 'wordpress') !== false) {
    $suggestions = ['WordPress', 'Themes', 'Plugins'];
} elseif (strpos($content, 'marketing') !== false) {
    $suggestions = ['Marketing', 'SEO', 'Content'];
}

if (empty($suggestions)) {
    echo json_encode(['suggested_tags' => ['No suggestions available']]);
} else {
    echo json_encode(['suggested_tags' => $suggestions]);
}
