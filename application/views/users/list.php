<div class="contentContainer">
    <div class="contentContainerTitle">
        Vartotojų tvarkymas
    </div>
    <div class="contentContainerContent">
        <br />
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Vartotojo vardas</th>
                <th>El. Paštas</th>
                <th>Lygis</th>
                <th>Aktyvuotas</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            $i = 1;
            foreach($users as $item) { ?>
            <tr>
                <td><?=$i;?></td>
                <td><?=$item->username;?></td>
                <td><?=$item->email;?></td>
                <td><?=$item->level;?></td>
                <td><?=$item->active ? "Taip" : "Ne"; ?></td>
                <td>
                    <?php 
                    if($item->temp_id != $_SESSION['user_id']) { ?>
                <?php if($item->active == 1) { ?>
                    <a href="<?=site_url('admin/users/deactivate/'.$item->id);?>">
                        <button type="button" class="btn btn-xs btn-default">Deaktyvuoti</button></a>
                <?php } else { ?>
                    <a href="<?=site_url('admin/users/activate/'.$item->id);?>">
                        <button type="button" class="btn btn-xs btn-default">Aktyvuoti</button></a>
                <?php }?>
                    
                    
                    <a href="<?=site_url('admin/users/delete/'.$item->id);?>">
                        <button type="button" class="btn btn-xs btn-default">Ištrinti</button></a>
                <?php } ?>
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