<div class="onepager-meta-container">
    <?php if ($post->post_status == "publish"): ?>
    <div class="toolbar">
        <div id="op-group-filter">
            <label>Filter :</label>
            <select>
              <option value="all">All</option>
              <?php foreach($groups as $group): ?>
              <option><?php echo $group ?></option>
              <?php endforeach; ?>
            </select>
        </div>

        <div class="op-btns-group">
            <a href="<?php echo $editorUrl ?>" style="display: <?php echo !count($sections) ? "none":"" ?>">Load Editor</a>

            <div style="display:none">
                <button type="button" id="onepager-save-layout" class="onepager-button">Save Layout</button>
                <button type="button" id="onepager-export-layout" class="onepager-button">Export Layout</button>
                <button type="button" id="onepager-import-layout" class="onepager-button">Import Layout</button>

                <!--needed for downloading with ajax-->
                <a id="downloadAnchorElem"></a>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div id="op-presets">
        <!-- Blank Template -->
        <div class="media">
            <figure class="thumbnails">
                <img src="<?php echo plugins_url( '../../assets/images/blank-template.jpg', __FILE__ );?>"/>
                <figcaption>
                    <h3>Blank Template</h3>
                    <button id="blank-template" data-layout-id="blank-template" class="op-btn" type="button">Create</button>
                </figcaption>
            </figure>
        </div>
        <?php foreach($onepagerLayouts as $layout): ?>
            <div class="media <?php echo tx_get_groups($layout['group'])?>">
                <figure class="thumbnails">
                    <img src="<?php echo $layout['screenshot']?>"/>
                    <figcaption>
                        <h3><?php echo $layout['name']?></h3>
                        <button data-layout-id="<?php echo $layout['id']?>" class="op-btn op-select-preset" type="button">Select</button>
                    </figcaption>
                </figure>
            </div>

        <?php endforeach;?>
    </div>
</div>
