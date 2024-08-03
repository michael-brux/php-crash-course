<?php
$total = 0;

require_once '_header.php';
?>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <h1>Shopping Cart</h1>
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Product</th>
                    <th class="text-center" colspan=2">Quantity</th>
                    <th class="text-right">Price</th>
                    <th class="text-right">Sub-total</th>
                    <th> </th>
                </tr>
                </thead>

<?php foreach($cartItems as $item):

    $item['quantity'] = 2;

    $price = $item['price'];
    $image = $item['image'];
    $subtotal = $item['quantity'] * $price;

    // update total
    $total += $subtotal;

    // format prices to 2 d.p.
    $price = number_format($item['price'], 2);
    $subtotal = number_format($subtotal, 2);
    $total = number_format($total, 2);
?>

                <tr>
                    <td>
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="/images/<?= $item['image']?>" alt="<?= $item['name']?>" width="100px"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?= $item['name'] ?></a></h4>
                            </div>
                        </div></td>
                    <td colspan="2" class="text-center align-middle">

                        <a href="#" class="btn btn-primary  btn-sm"><span class="glyphicon glyphicon-minus"></span></a>

                        <span class="spacing"><?= $item['quantity'] ?></span>
                        <a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span></a>
                    </td>

                    <td class="text-right align-middle"><strong>$<?= $price ?></strong></td>
                    <td class="text-right align-middle"><strong>$<?= $subtotal ?></strong></td>
                    <td class="align-middle">
                        <a href="#" class="btn btn-danger btn-sm" role="button" aria-disabled="true"><span class="glyphicon glyphicon-remove"></span> Remove</a>
                    </td>
                </tr>

<?php
endforeach;
?>
<tr>
    <td>   </td>
    <td>   </td>
    <td>   </td>
    <td class="text-right "><h3>Total</h3></td>
    <td class="text-right"><h3><strong>$<?= $total ?></strong></h3></td>
    <td>   </td>
</tr>
            </table>
        </div>
    </div>
</div>
