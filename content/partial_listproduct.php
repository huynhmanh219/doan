
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Catalog Table </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Catalog</h4>
                            <p class="card-description"> Database</code>
                            </p>
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th> catalog_id </th>
                                <th> catalog_name </th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($dslistproduct as $list)
                                {
                                    echo '
                                        <tr class="table">
                                            <td> '.$list['catalog_id'].' </td>
                                            <td> '.$list['catalog_name'].' </td>
                                        </tr>';?>
                                <?php   
                                }
                                ?>
                                
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</div>