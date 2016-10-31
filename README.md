# Magento_Annonce
Add sliding configurable messages at the top of your website. Uses owl carrousel.

## Howto
After installing the module, activate and configure the block in System > Configuration > Canal-Web > Annonce.
You can configure up to 5 messages that will be displayed as a sliding block in your header. Only filled fields will show up.

You may need to edit your header.phtml to add the following:
```php
<?php echo $this->getChildHtml('annonce_annonce') ?>
```
wherever you want your block to be called.
