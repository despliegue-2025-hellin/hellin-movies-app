<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hellín Movies</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>

<h1>🎬 Hellín Movies</h1>

<?php if ($movies === null): ?>
    <div class="error-box">
        <p>⚠️ Error de conexión con la API de películas.</p>
        <p>Comprueba que <strong>api-movies</strong> está en funcionamiento.</p>
    </div>
<?php elseif (empty($movies)): ?>
    <div class="error-box">
        <p>No hay películas disponibles.</p>
    </div>
<?php else: ?>

<div class="grid">
    <?php foreach ($movies as $m): ?>
        <div class="card">
            <div class="card-poster">
                <?php
                $genre = strtolower(trim($m['genre'] ?? 'unknown'));
                $genreEmoji = match($genre) {
                    'sci-fi', 'ciencia ficción' => '🚀',
                    'action', 'acción'          => '💥',
                    'drama'                     => '🎭',
                    'thriller'                  => '🔪',
                    'comedy', 'comedia'         => '😂',
                    'horror', 'terror'          => '👻',
                    'fantasy', 'fantasía'       => '🐉',
                    'animation', 'animación'    => '🎨',
                    default                     => '🎬'
                };
                ?>
                <span class="genre-emoji"><?= $genreEmoji ?></span>
            </div>

            <div class="card-info">
                <div class="name"><?= htmlspecialchars($m['title']) ?></div>
                <p><strong>Año:</strong> <?= htmlspecialchars($m['year'] ?? 'N/A') ?></p>
                <p><strong>Género:</strong> <?= htmlspecialchars($m['genre'] ?? 'N/A') ?></p>
                <p><strong>Director:</strong> <?= htmlspecialchars($m['director'] ?? 'N/A') ?></p>
                <p class="rating">⭐ <?= htmlspecialchars($m['rating'] ?? 'N/A') ?> / 10</p>
                <p><a href="/?movie_id=<?= urlencode($m['id']) ?>">Ver ficha completa →</a></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php endif; ?>

</body>
</html>
