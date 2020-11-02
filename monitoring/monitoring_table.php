<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../style/materialize/css/materialize.min.css">
</head>
<body>

<div class="row">
  <div class="col s12 m6">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <div class="row">
        <label>Materialize Select</label>
           <select>
              <option value = "" disabled selected>Select Fruit</option>
              <option value = "1">Mango</option>
              <option value = "2">Orange</option>
              <option value = "3">Apple</option>
           </select>
        </div>
    </div>
  </div>
</div>

<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js "></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  } );
</script> -->

<!-- <script type="text/javascript" src="../style/DataTables/jquery-3.3.1.min.js"></script> -->
<script type="text/javascript" src="../style/materialize/js/materialize.min.js"></script>
<script type="text/javascript">

  const DropDown = document.querySelectorAll('.dropdown-trigger');
  M.Dropdown.init(DropDown);

</script>
</body>
</html>