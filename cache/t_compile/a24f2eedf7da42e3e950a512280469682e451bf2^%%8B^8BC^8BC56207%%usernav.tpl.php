<?php /* Smarty version 2.6.25-dev, created on 2018-02-12 09:32:27
         compiled from header/usernav.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'header/usernav.tpl', 15, false),array('modifier', 'escape', 'header/usernav.tpl', 15, false),)), $this); ?>
<?php ob_start(); ?>
    <?php if ($this->_tpl_vars['displayPageHeaderTitle'] && is_string ( $this->_tpl_vars['displayPageHeaderTitle'] )): ?>
        <?php $this->assign('title', $this->_tpl_vars['displayPageHeaderTitle']); ?>
    <?php elseif ($this->_tpl_vars['currentContextName']): ?>
        <?php $this->assign('title', $this->_tpl_vars['currentContextName']); ?>
    <?php else: ?>
        <?php $this->assign('title', $this->_tpl_vars['applicationName']); ?>
    <?php endif; ?>

    <ul id="navigationContextMenu" class="pkp_nav_context pkp_nav_list" role="navigation" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.navigation.siteContext"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
">
        <li <?php if ($this->_tpl_vars['multipleContexts']): ?>class="submenuOpensBelow"<?php endif; ?> aria-haspopup="true" aria-expanded="false" title="<?php echo $this->_tpl_vars['title']; ?>
">
            <span class="pkp_screen_reader">
                <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "context.current"), $this);?>

            </span>

            <a href="#" class="pkp_current_context">
                <?php echo $this->_tpl_vars['title']; ?>

            </a>

            <?php if ($this->_tpl_vars['multipleContexts']): ?>
                <h3 class="pkp_screen_reader">
                    <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "context.select"), $this);?>

                </h3>
                <ul class="pkp_contexts">
                    <?php $_from = $this->_tpl_vars['contextsNameAndUrl']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['url'] => $this->_tpl_vars['name']):
?>
                        <?php if ($this->_tpl_vars['currentContextName'] == $this->_tpl_vars['name']): ?><?php continue; ?><?php endif; ?>
                        <li title="<?php echo $this->_tpl_vars['name']; ?>
">
                            <a href="<?php echo $this->_tpl_vars['url']; ?>
">
                                <?php echo $this->_tpl_vars['name']; ?>

                            </a>
                        </li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
            <?php endif; ?>
        </li>
    </ul>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('dropDownTopLeftMenu', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:header/usernav.tpl", 'smarty_include_vars' => array('dropDownTopLeftMenu' => $this->_tpl_vars['dropDownTopLeftMenu'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>