<?php /* Smarty version 2.6.26, created on 2014-05-11 21:41:18
         compiled from bottomnaviitem.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'bottomnaviitem.tpl', 14, false),array('modifier', 'replace', 'bottomnaviitem.tpl', 43, false),array('modifier', 'oxlower', 'bottomnaviitem.tpl', 144, false),array('modifier', 'lower', 'bottomnaviitem.tpl', 144, false),)), $this); ?>
</div>

<div class="actions">
<?php echo '<ul>'; ?><?php $this->assign('allowSharedEdit', true); ?><?php echo ''; ?><?php if (! $this->_tpl_vars['disablenew']): ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->user_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWUSER'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->user_newremark && $this->_tpl_vars['oxid'] != "-1"): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.newremark" href="#" onClick="Javascript:top.oxid.admin.changeEditBar(\'user_remark\', 3); return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWREMARK'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->user_newaddress && $this->_tpl_vars['oxid'] != "-1"): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.newaddress" href="#" onClick="Javascript:top.oxid.admin.changeEditBar(\'user_address\', 4); return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWADDRESS'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->payment_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWPAYMENT'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->newsletter_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWNEWSLETTER'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->shop_new && $this->_tpl_vars['oView']->isMall() && $this->_tpl_vars['malladmin'] == 1): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWSHOP'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->usergroup_new && $this->_tpl_vars['allowSharedEdit']): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWUSERGROUP'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->category_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWCATEGORY'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->category_refresh): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.refresh" href="#" onClick="Javascript:var agree=confirm(\''; ?><?php echo smarty_function_oxmultilang(array('ident' => 'BOTTOMNAVIITEM_ATTENTION'), $this);?><?php echo '\');if (agree){top.oxid.admin.editThis( -1 );popupWin=window.open(\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('replace', true, $_tmp, "&amp;", "&") : smarty_modifier_replace($_tmp, "&amp;", "&")); ?><?php echo '&cl=category_update\', \'remote\', \'scrollbars=yes,width=500,height=400\')}" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWCATTREE'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->category_resetnrofarticles): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.resetnrofarticles" href="#" onClick="Javascript:document.myedit.fnc.value=\'resetNrOfCatArticles\';document.myedit.submit();" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_RESETNROFARTICLESINCAT'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->article_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWARTICLE'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->article_preview && $this->_tpl_vars['oxid'] != -1): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.preview" href="'; ?><?php if ($this->_tpl_vars['edit']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['edit']->getStdLink(); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['oViewConf']->getBaseDir(); ?><?php echo '?cl=details&anid='; ?><?php echo $this->_tpl_vars['oxid']; ?><?php echo ''; ?><?php endif; ?><?php echo '&amp;preview='; ?><?php echo $this->_tpl_vars['oView']->getPreviewId(); ?><?php echo '" target="new">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_ARTICLEREVIEW'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->attribute_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWITEMS'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->statistic_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWSTATISTIC'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->selectlist_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWSELECTLIST'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->discount_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWDISCOUNT'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->delivery_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWDELIVERY'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->deliveryset_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWDELIVERYSET'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->vat_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWMWST'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->news_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWNEWS'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->links_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWLINK'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->voucher_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWVOUCHER'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->order_newremark && $this->_tpl_vars['oxid'] != -1): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.newremark" href="#" onClick="Javascript:top.oxid.admin.changeEditBar(\'order_remark\', 4);return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWREMARK'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->country_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWCOUNTRY'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->language_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWLANGUAGE'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->vendor_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWVENDOR'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->vendor_resetnrofarticles): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.resetnrofarticles" href="#" onClick="Javascript:document.myedit.fnc.value=\'resetNrOfVendorArticles\';document.myedit.submit();" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_RESETNROFARTICLESINVND'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->manufacturer_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWMANUFACTURER'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->manufacturer_resetnrofarticles): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.resetnrofarticles" href="#" onClick="Javascript:document.myedit.fnc.value=\'resetNrOfManufacturerArticles\';document.myedit.submit();" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_RESETNROFARTICLESINMAN'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->wrapping_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWWRAPPING'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['bottom_buttons']->content_new): ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWCONTENT'), $this);?><?php echo '</a> |</li>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomnavicustom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php if ($this->_tpl_vars['sHelpURL']): ?><?php echo ''; ?><?php echo '<li><a '; ?><?php if (! $this->_tpl_vars['firstitem']): ?><?php echo 'class="firstitem"'; ?><?php $this->assign('firstitem', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ' id="btn.help" href="'; ?><?php echo $this->_tpl_vars['sHelpURL']; ?><?php echo '/'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getActiveClassName())) ? $this->_run_mod_handler('oxlower', true, $_tmp) : smarty_modifier_oxlower($_tmp)); ?><?php echo '.html" OnClick="window.open(\''; ?><?php echo $this->_tpl_vars['sHelpURL']; ?><?php echo '/'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getActiveClassName())) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?><?php echo '.html\',\'OXID_Help\',\'width=800,height=600,resizable=no,scrollbars=yes\');return false;">'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_OPENHELP'), $this);?><?php echo '</a></li>'; ?><?php endif; ?><?php echo '</ul>'; ?>

</div>