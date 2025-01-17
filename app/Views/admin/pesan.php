<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<style>
  .email-wrap {
    white-space: normal;
    word-wrap: break-word;
    word-break: break-all;
  }
</style>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Pesan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Pesan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- Notification -->
  <?php if (session()->has('success')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= session('success') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <!-- End Notification -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pesan</h5>
            <p>Tabel di bawah berisi pesan dari pengunjung web</p>

            <!-- Table with striped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th class="col-1">No</th>
                  <th class="col-2">Nama</th>
                  <th class="col-2">Email</th>
                  <th class="col-3">Pesan</th>
                  <th class="col-2">Tanggal</th>
                  <th class="col-1">Email</th>
                  <th class="col-1">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($messages as $index => $message) : ?>
                  <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $message['nama'] ?></td>
                    <td class="email-wrap"><?= $message['email'] ?></td>
                    <td><?= truncate($message['message'], 150) ?></td>
                    <td><?= date('d-m-Y', strtotime($message['created_at'])) ?></td>
                    <td>
                      <?php
                      if ($message['subscribe'] == 1) {
                        echo 'Bersedia';
                      } else {
                        echo 'Tidak Bersedia';
                      }
                      ?>
                    </td>
                    <td>
                      <a href="<?= base_url('pesan/lihat/' . $message['id_messages']) ?>" class="btn btn-primary btn-sm">
                        <i class="bi bi-eye"></i></a>
                      <a href="<?= base_url('pesan/hapus/' . $message['id_messages']) ?>" class="btn btn-danger btn-sm delete-message" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?');">
                        <i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <!-- End Table with striped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Change the default dropdown value of datatable-selector to 5
    var datatableSelector = document.querySelector('.datatable-selector');
    if (datatableSelector) {
      datatableSelector.value = 5;
      var event = new Event('change', {
        bubbles: true
      });
      datatableSelector.dispatchEvent(event);
    }

    // Initialize DataTable with customized settings
    var table = $('.datatable').DataTable({
      pageLength: 5 // Set default page length to 5
    });

    // Change dropdown value when DataTable is initialized
    table.on('init', function() {
      datatableSelector.value = 5;
      datatableSelector.dispatchEvent(new Event('change', {
        bubbles: true
      }));
    });

    // Custom search function
    $.fn.dataTable.ext.search.push(
      function(settings, data, dataIndex) {
        var searchTerm = $('div.dataTables_filter input').val().toLowerCase();
        var name = data[1].toLowerCase(); // Name column
        var email = data[2].toLowerCase(); // Email column
        var message = data[3].toLowerCase(); // Message column

        if (name.includes(searchTerm) || email.includes(searchTerm) || message.includes(searchTerm)) {
          return true;
        }
        return false;
      }
    );

    // Update search on input change
    $('div.dataTables_filter input').on('keyup', function() {
      table.draw();
    });
  });
</script>

<?= $this->endSection(); ?>