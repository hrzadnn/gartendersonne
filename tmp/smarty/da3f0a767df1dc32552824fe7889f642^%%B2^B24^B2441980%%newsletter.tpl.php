<?php /* Smarty version 2.6.26, created on 2014-05-11 15:33:29
         compiled from widget/footer/newsletter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'widget/footer/newsletter.tpl', 10, false),)), $this); ?>
<form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
  <div class="newsletter corners">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="fnc" value="fill">
    <input type="hidden" name="cl" value="newsletter">
    <?php if ($this->_tpl_vars['oView']->getProduct()): ?>
        <?php $this->assign('product', $this->_tpl_vars['oView']->getProduct()); ?>
        <input type="hidden" name="anid" value="<?php echo $this->_tpl_vars['product']->oxarticles__oxnid->value; ?>
">
    <?php endif; ?>
    <label><?php echo smarty_function_oxmultilang(array('ident' => 'NEWSLETTER'), $this);?>
</label>
    <input class="textbox" type="text" name="editval[oxuser__oxusername]" value="">
    <button class="submitButton largeButton" type="submit"><?php echo smarty_function_oxmultilang(array('ident' => 'SUBSCRIBE'), $this);?>
</button>
  </div>
</form>