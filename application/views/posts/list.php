<div class="contentContainer">
    <div class="contentContainerTitle">
        Įrašų tvarkymas
    </div>
    <div class="contentContainerContent">
        <br />
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Pavadinimas</th>
                <th>Data</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            $i = 1;
            foreach($posts as $item) { ?>
            <tr>
                <td><?=$i;?></td>
                <td><a href="<?=site_url('admin/posts/edit/'.$item->id);?>"><?=$item->title;?></a></td>
                <td><?=date("Y-m-d H:i", $item->date);?></td>
                <td><a href="<?=site_url('admin/posts/edit/'.$item->id);?>">
                        <button type="button" class="btn btn-xs btn-default">Taisyti</button></a>
                    <a href="<?=site_url('admin/posts/delete/'.$item->id);?>">
                        <button type="button" class="btn btn-xs btn-default">Ištrinti</button></a>
                </td>
            </tr>
            
            <?php 
            $i++;
            } ?>
            </tbody>
        </table>
    </div>
</div>
<hr class="contentContainerHr">