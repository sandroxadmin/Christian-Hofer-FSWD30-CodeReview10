<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
  </head>
  <body>
    <table>
      <tr>
        <th></th>
        <th>Title</th>
        <th>ISBN</th>
        <th></th>
        <th></th>
      </tr>
    <?php foreach ($param['mediaArray'] as $row): ?>
      <tr>
        <td><?php echo $row->mediaId ?></td>
        <td><?php echo $row->title ?></td>
        <td><?php echo $row->isbnCode ?></td>

      </tr>
    <?php endforeach; ?>


    </table>

</body>
</html>