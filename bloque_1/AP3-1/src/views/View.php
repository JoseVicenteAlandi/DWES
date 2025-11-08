<?php
class View
{
    public function render(array $data): void
    {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="keywords" content="<?php echo htmlspecialchars($data['keywords']); ?>">
            <meta name="description" content="<?php echo htmlspecialchars($data['description']); ?>">
            <title><?php echo htmlspecialchars($data['title']); ?></title>
        </head>
        <body>
        <h1><?php echo htmlspecialchars($data['title']); ?></h1>
        <table border="1" cellpadding="8">
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
            <?php foreach ($data as $campo => $valor): ?>
                <tr>
                    <td><?php echo htmlspecialchars($campo); ?></td>
                    <td><?php echo htmlspecialchars($valor); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        </body>
        </html>
        <?php
    }
}
