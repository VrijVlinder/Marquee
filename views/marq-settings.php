<?php if (!defined('APPLICATION')) exit();
echo $this->Form->Open();
echo $this->Form->Errors();
?>


<h1><?php echo Gdn::Translate('Marquee'); ?></h1>

<div class="Info"><?php echo Gdn::Translate('Checking the images hides them by order stored.</br>The first 6 are for gif images but you can change that in the plugin if you want others just check type. The default image is image1 , you can leave these unchecked if you want the deafult image1 to be the one displayed.</br> Checking the up to the fifth one hides the Image Marquee only.</br> Checking all the fields hides the whole marquee.</br>To edit the text marquee you do it in the class.marquee.plugin.php . '); ?></div>

<table class="AltRows">
    <thead>
        <tr>
            <th><?php echo Gdn::Translate('Option'); ?></th>
            <th class="Alt"><?php echo Gdn::Translate('Description'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php
                echo $this->Form->CheckBox (T('Plugins.Marquee.Imm1'));
                ?>
            </td>
            <td class="Alt">
<?php echo Gdn::Translate('Check the first Image to hide'); ?>
            </td>
        </tr>

        <tr>
            <td>
                <?php
                echo $this->Form->CheckBox (T('Plugins.Marquee.Imm2'));
                ?>
            </td>
            <td class="Alt">
<?php echo Gdn::Translate('Check the second Image to hide'); ?>
            </td>
        </tr>
        
        <tr>
            <td>
                <?php
                echo $this->Form->CheckBox (T('Plugins.Marquee.Imm3'));
                ?>
            </td>
            <td class="Alt">
<?php echo Gdn::Translate('Check the third Image to hide'); ?>    
            </td>
        </tr>

        <tr>
            <td>
                <?php
                echo $this->Form->CheckBox (T('Plugins.Marquee.Imm4'));
                ?>
            </td>
            <td class="Alt">
<?php echo Gdn::Translate('Check the fourth Image to hide'); ?>         
            </td>
        </tr>  

        <tr>
            <td>
                <?php
                echo $this->Form->CheckBox (T('Plugins.Marquee.Imm5'));
                ?>
            </td>
            <td class="Alt">
<?php echo Gdn::Translate('Check to hide Image Marquee'); ?>         

            </td>
        </tr>

        <tr>
            <td>
                <?php
                echo $this->Form->CheckBox (T('Plugins.Marquee.Imm6'));
                ?>
            </td>
            <td class="Alt">
<?php echo Gdn::Translate('Check to hide all'); ?>            
            </td>
        </tr>  

</table>

<?php
echo $this->Form->Close('Save');


