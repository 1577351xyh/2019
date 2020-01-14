<div id="add-wrap" class="add-wrap">

    <h3>添加关键词(自动锚文本)</h3>

    <div class="form">
        <p class="value">
            <label for="da-keyword">关键词</label><input type="text" name="da-keyword" id="da-keyword" value=""/>
            <label for="da-url">网址url</label><input type="text" name="da-url" id="da-url" class="long-text" value=""/>
            <br/><br/><label for="da-category">分类&nbsp;&nbsp;&nbsp;</label>
            <select name="dacategory" id="dacategory" onchange="document.getElementById('da-category').value=this.value">
                <option value="其它">其它</option>
                <?php

                $datas_name = DXSEO_PRE . '_anchor_text_datas';
                $datas = get_option( $datas_name );
                foreach($datas as $k=>$v){
                    $category[]= $v[1];
                }
                $category = array_unique($category);//去重
                $category = array_merge(array_diff($category, array('其它')));
                foreach ($category as $key=>$value){

                    echo '<option value='.$category[$key].'>'.$category[$key].'</option>';

                }

                ?>
                <input type="text" name="da-category" id="da-category" value="其它"/>
            </select>

            <label for="da-describe">描述&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="da-describe" id="da-describe" class="long-text" value=""/>
            <input type="button" name="da-button-add" id="da-button-add" class="button button-primary" value="保存" />
            <input type="button" id="da-button-default" class="button" value="刷新"/>
        </p>
        <p class="att">
            <span>链接属性：</span>
            <?php
            $defaults = get_option( DXSEO_PRE . '_anchor_att_defaults' );
            $nofollow = isset( $defaults[0] ) ? $defaults[0] : 0;
            $blank = isset( $defaults[1] ) ? $defaults[1] : 1;
            $ignore = isset( $defaults[2] ) ? $defaults[2] : 1;
            $strong = isset( $defaults[3] ) ? $defaults[3] : 0;
            $num = isset( $defaults[4] ) ? $defaults[4] : 1;
            $priority = isset( $defaults[5] ) ? $defaults[5] : 10;
            ?>
            <span><label for="att-nofollow">添加nofollow</label><input type="checkbox" name="att-nofollow" id="att-nofollow" value="1" <?php checked( 1, $nofollow ); ?>/></span>
            <span><label for="att-blank">新窗口打开</label><input type="checkbox" name="att-blank" id="att-blank" value="1" <?php checked( 1, $blank ); ?>/></span>
            <span><label for="att-ignore">忽略大小写</label><input type="checkbox" name="att-ignore" id="att-ignore" value="1" <?php checked( 1, $ignore ); ?>/></span>
            <span><label for="att-strong">加粗</label><input type="checkbox" name="att-strong" id="att-strong" value="1" <?php checked( 1, $strong ); ?>/></span>
            <span><label for="att-num">匹配数量</label><input type="text" name="att-num" id="att-num" class="small-text" value="<?php echo $num; ?>"/></span>
            <span><label for="att-priority">权重</label><input type="text" name="att-priority" id="att-priority" class="small-text" value="<?php echo $priority; ?>"/></span>
        </p>
    </div>

    <p id="destroy-datas-wrap"><input type="button" id="destroy-datas" class="button" value="一键删除所有数据"><span class="message"></span></p>

</div>