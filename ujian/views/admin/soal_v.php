<section class="title">
    <h4><?php echo lang('ujian:group'); ?> - <?php echo $group->judul ; ?> </h4>
</section>

<section class="item">
    <div class="content">
        
    <div id="stream-table" class="streams">
            <?php if (!empty($entries)): ?>
        <table border="0" class="table-list" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th><?php echo lang('ujian:namag'); ?></th>
                    <th><?php echo lang('ujian:jawaban');?></th>
                    <th></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="7">
                        <div class="inner"><?php $this->load->view('admin/partials/pagination'); ?></div>
                    </td>
                </tr>
            </tfoot>
            <tbody>
                <!--<?php dump($entries); ?>-->
                <?php $i=1; foreach( $entries['entries'] as $item ): ?>
                
                    <td><?php echo $i; ?></td>
                    <td><?php echo $item["pertanyaan"]; ?></td>
                    <td><?php echo $item["jawaban"]; ?></td>

                     <td class="actions">
                        <?php echo anchor('admin/ujian/edit_soal/'.$item["id"], lang('ujian:edit'), array('class'=>'button', 'title'=>lang('ujian:edit'))); ?>
                    </td>

                    <td class="actions">
                        <?php echo anchor('admin/ujian/delete_soal/'.$item["id"], lang('ujian:deleted'), array('class'=>'button', 'title'=>lang('ujian:deleted'))); ?>
                    </td>
                    
                </tr>
                <?php $i++; endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="no_data"><?php echo lang('ujian:no_items'); ?></div>
    <?php endif;?>
    </div>


</div>
</section>