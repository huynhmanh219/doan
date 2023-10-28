<style>
        .row{
            margin-left:60px;
        }
        .rowTable{
            margin:10px 0;
        }
    </style>
<div class="content-wrapper">
                <div class="page-header">
                <h3 class="page-title"> Add Product </h3>
                </div>
                <div class="">
                    <div class="col-lg-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Product</h4>
                                <p class="card-description"> Database</code></p>
                                <form action="xuly_insert_product.php" method="POST" enctype="multipart/form-data"> 
                                    <table>
                                        <tr class="rowTable">
                                            <td class="tdLabel"><label class="label">Id:</label></td>
                                            <td class="row"><input type="text" name="id" style="padding:3px 1px 3px; border:1px solid black;"/></td>
                                        </tr>
                                        </hr>
                                        <tr>
                                            <td class="tdLabel"><label >Catalog_id:</label></td>
                                            <td class="row"><input type="text" name="catalog_id" style="padding:3px 0 3px; border:1px solid black;">
                                                </td>
                                        </tr>
                                        <tr>
                                            <td class="tdLabel"><label  class="label">Name:</label></td>
                                            <td class="row"><input type="text" name="name" style="padding:3px 1px 3px; border:1px solid black;"/></td>
                                        </tr>
                                        <tr>
                                            <td class="tdLabel"><label >Price:</label></td>
                                            <td class="row"><input type="text" name="price"  style="padding:3px 1px 3px; border:1px solid black;"/></td>
                                        </tr>
                                        <tr>
                                            <td class="tdLabel"><label >Image:</label></td>
                                            <td class="row"><input type="file" name="myfile"  style="padding:3px 1px 3px; border:1px solid black;"/></td>
                                        </tr>
                                        <tr>
                                            <td class="tdLabel"><label >Created:</label></td>
                                            <td class="row"><input type="date" name="created"  style="width:120px; padding:3px 1px 3px; border:1px solid black;"/></td>
                                        </tr>
                                        <tr>
                                            <td class="tdLabel"><label >Status:</label></td>
                                            <td class="row"><input type="text" name="status" style="width:120px; padding:3px 1px 3px; border:1px solid black;" placeholder="1 or 0">
                                            </td>
                                        </tr>
                                        <tr>
                                        <td >
                                            <div ><input type="submit"  value="ADD" />
                                            </div>
                                        </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>