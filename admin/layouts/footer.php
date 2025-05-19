</div>
</div>

<script src="../../dist-admin/js/scripts.js"></script>
<script src="../../dist-admin/js/custom.js"></script>
<?php if(isset($_SESSION['success_message'])): ?>
  <script>
    iziToast.success({
      // title:"Hey",
      message:"<?= $_SESSION['success_message'] ?>",
      // color:'green',
      position:'topCenter',
      // icon:"fa fa-check"
    });
  </script>
<?php unset($_SESSION['success_message']); ?>
<?php endif; ?>
<?php if(isset($_SESSION['error_message'])): ?>
  <script>
    iziToast.error({
      // title:"Hey",
      message:"<?= $_SESSION['error_message'] ?>",
      position:'topCenter',
      // color:'green',
      // icon:"fa fa-check"
    });
  </script>
<?php unset($_SESSION['error_message']); ?>
<?php endif; ?>
</body>
</html>