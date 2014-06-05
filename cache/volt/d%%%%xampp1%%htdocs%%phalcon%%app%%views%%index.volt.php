<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php echo $this->tag->getTitle(); ?>
        <?php echo $this->tag->stylesheetLink('assets/plugins/uniform/css/uniform.default.css'); ?>
        <?php echo $this->tag->stylesheetLink('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>
        <?php echo $this->tag->stylesheetLink('assets/plugins/font-awesome/css/font-awesome.min.css'); ?>
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your invoices">
        <meta name="author" content="Phalcon Team">
    </head>
    <body>
        <?php echo $this->getContent(); ?>
        
    </body>
</html>