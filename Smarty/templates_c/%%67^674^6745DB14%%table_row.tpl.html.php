<?php /* Smarty version 2.6.28, created on 2015-08-09 12:39:47
         compiled from table_row.tpl.html */ ?>
<tr><td><?php echo $this->_tpl_vars['ad']->getId(); ?>
</td>
                 <td><?php echo $this->_tpl_vars['ad']->getTitle(); ?>
</td>
                 <td><?php echo $this->_tpl_vars['ad']->getDesc(); ?>
</td>
                 <td><?php echo $this->_tpl_vars['ad']->getName(); ?>
</td>
                 <td><a href="?del=<?php echo $this->_tpl_vars['ad']->getId(); ?>
" class="btn btn-danger">Delete</a></td>
                 </tr>