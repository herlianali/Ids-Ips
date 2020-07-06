</main>
<script type="text/javascript" src="../style/materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="../style/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
<script type="text/javascript" src="../style/DataTables/datatables.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
      $('#table_id').DataTable();
    } );
</script>

<script type="text/javascript">

  const SideNav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(SideNav);

  const DropDown = document.querySelectorAll('.dropdown-trigger');
  M.Dropdown.init(DropDown);

  const Modal = document.querySelectorAll('.modal');
  M.Modal.init(Modal);

  const Select = document.querySelectorAll('select');
  M.FormSelect.init(Select);

  const Collapsible = document.querySelectorAll('.collapsible');
  M.Collapsible.init(Collapsible);
</script>
</body>
</html>
