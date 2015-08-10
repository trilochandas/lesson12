<?php /* Smarty version 2.6.28, created on 2015-08-10 16:29:42
         compiled from table_row.tpl.html */ ?>
<tr><td><?php echo $this->_tpl_vars['ad']->getId(); ?>
</td>
                 <td><a href="?id=<?php echo $this->_tpl_vars['ad']->getId(); ?>
"><?php echo $this->_tpl_vars['ad']->getTitle(); ?>
</a></td>
                 <td><?php echo $this->_tpl_vars['ad']->getDesc(); ?>
</td>
                 <td><?php echo $this->_tpl_vars['ad']->getPrice(); ?>
</td>
                 <td><?php echo $this->_tpl_vars['ad']->getName(); ?>
</td>
                 <td><a href="?del=<?php echo $this->_tpl_vars['ad']->getId(); ?>
" class="btn btn-danger">Delete</a></td>
                 </tr>