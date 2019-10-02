<?php
    if($productTable = get_field('products')){
?>
    <div class="container pp--padded container--table">

        <table class="table--products">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Size</th>
                    <th>Performance</th>
                    <th>Benefits</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($productTable as $pt){ ?>
                <tr>
                    <td style="background-image: url(<?php echo $pt['image']; ?>);"><?php echo $pt['name']; ?></td>
                    <td colspan="2">
                        <table>
                        <?php foreach($pt['sizes'] as $size){ ?>
                            <tr>
                                <td><?php echo $size['name'].'<br>'.$size['dimensions']; ?></td>
                                <td><?php echo $size['performance']; ?></td>
                            </tr>
                        <?php } // endforeach; ?>
                        </table>
                    </td>
                    <td>
                        <ul>
                        <?php foreach($pt['benefits'] as $bene){ ?>
                            <li><?php echo $bene['benefit']; ?></li>
                        <?php } // endforeach; ?>
                        </ul>
                    </td>
                </tr>
                <?php } // endforeach; ?>
            </tbody>
        </table>

        <h2>Suggestions</h2>
        <p>Suggestions provided by Icertech are based on UK summertime conditions, and are intended as a guide only. Ultimately the responsibility lies with the customer to conduct trials of their own and establish whether performance is suitable</p>
    </div>
<?php
    } // endif;
?>
