<div class="container-fluid modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
    <div class="container-fluid modal-dialog modal-1g">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <button class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="close"></button>
                    <span aria-hidden="true">&times;</span>
                </button> -->
                <h4 class="modal-title text-center"><?php $row['tittle']; ?></h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-4">
                            <div class="center-block">
                            <img src="<?php $row['image']; ?>" class="details img-response"/>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4>Details</h4>
                        <p><?php $row['details']; ?></p>
                        <p><?php $row['price'];?></p>
                        <p><?php $row['tittle']; ?></p>
                        <form action="cart_ittems.php?id=<?php $row['ID']; ?>" method="POST">
                            <div class="form-group">
                                <div class="col-xs-3">
                                    <label for="quantity" id="quatity-label">Quantity</label>
                                    <input type="text" class="form-control" id="quantity" name="quantity"/>
                                </div><br />
                                <div class="form-group">
                                    <label for="size">Size</label>
                                    <select name="size" id="size">
                                        <option value=""></option>
                                        <option value="26">26</option>
                                        <option value="28">28</option>
                                        <option value="30">30</option>
                                        <option value="32">32</option>
                                    </select>
                                    <button class="btn btn-warning" type="submit">Add To Cart</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
