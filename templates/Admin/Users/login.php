<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image">
                        <?= $this->Html->image('admincnx.jpg') ?>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Bienvenue - Connexion </h1>
                            </div>
                            <div class="users form">
                                <?= $this->Flash->render() ?>
                                <?= $this->Form->create() ?>
                                <?php
                                echo $this->Form->control('email');
                                echo $this->Form->control('password');
                                ?>
                                <?= $this->Form->button(__('Login')) ?>
                                <?= $this->Form->end() ?>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Mot de passe oublié?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>