<?php
class sfWidgetFormSchemaFormatterDiv extends sfWidgetFormSchemaFormatter
{
  protected $rowFormat          = '<div class="sf_admin_form_row">
                                    %error%
                                    <div>
                                      %label%
                                      <div class="content">%field%</div>
                                    %help% %hidden_fields%
                                    </div></div>';
   protected   $errorRowFormat  = '<div>%errors%</div>';
    protected  $helpFormat      = '<div class="form_help">%help%</div>';
    protected  $decoratorFormat = '<div>  %content%</div>';
 
  public function formatRow($label, $field, $errors = array(), $help = '', $hiddenFields = null)
  {
    $row = parent::formatRow(
      $label,
      $field,
      $errors,
      $help,
      $hiddenFields
    );
 
    return strtr($row, array(
      '%row_class%' => (count($errors) > 0) ? ' form_row_error' : '',
    ));
  }
}