<h1>Connexion</h1>
<?php echo $this->Facebook->loginButton($options = []); ?>
<?php echo $this->Facebook->followButton($options = []); ?>
<?= $this->Form->create() ?>
<?= $this->Form->input('email') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>
