<div>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col">
                <div class="col-md-12 container">
                    <br>
                    <h2 class="text-primary mb-4"><?php echo $TitreDeLaPage ?></h2>
                    <?PHP if($TitreDeLaPage=='Corriger votre ajout') echo service('validation')->listErrors();
                             if(!isset($txtIdentifiant)) $txtIdentifiant=''; if(!isset($txtEmail)) $txtEmail='';if(!isset($txtBtn)) $txtBtn='Valider';
                    echo form_open('AdministrateurSuper/ajouter_un_administrateur');
                    echo csrf_field();
                    ?>
                    <?php
                    echo form_label('Identifiant : ', 'Identifiant');
                    echo form_input('Identifiant', set_value('Identifiant' , $txtIdentifiant ), ['placeholder' => 'Identifiant', 'class' => 'form-control']);
                    echo form_input('IdentifiantEmp', set_value('IdentifiantEmp' , $txtIdentifiant ), ['placeholder' => 'Identifiant', 'class' => 'form-control'], 'hidden');
                    echo '<br>';
                    echo form_label('Mot de passe : ', 'Mdp');
                    echo form_input('Mdp', set_value('Mdp'), ['placeholder' => 'Mot de passe', 'class' => 'form-control']);
                    echo '<br>';
                    echo form_label('Email : ', 'Email');
                    echo form_input('Email', set_value('Email' , $txtEmail), ['placeholder' => 'Email@email.fr', 'class' => 'form-control']);
                    echo '<br>';
                    ?>
                    <?php echo form_submit('btnValidate', set_value('Valider' , $txtBtn), ['class'=>'btn btn-danger btn-md']) ?>
                    
                    </form>         
                </div>
            </div>
            <div class="col">
                <div class="col-md-12 container">
                    <br>
                    <h2 class="text-primary mb-5">Liste des administrateur</h2>
                    <table class="table">
                        <tbody>
                            <?php
                                foreach ($AdmEmp as $Emp):?>
                            <tr>
                                <?php echo form_open('AdministrateurSuper/modifier_supprimer_un_administrateur');
                                echo csrf_field();?>
                                <td><?php echo form_input('idEmp' , set_value('Emp', $Emp['IDENTIFIANT']),['placeholder' => 'Nom', 'class'=>'form-control'], 'hidden') ?></td>
                                <td><?php echo $Emp['IDENTIFIANT'] ?></td>
                                <td><?php echo form_submit('btnModif', 'Modifier ', ['class'=>'btn btn-primary btn-md']) ?></td>
                                <td><?php echo form_submit('btnSup', 'Supprimer ', ['class'=>'btn btn-primary btn-md']) ?></td>
                                </form>
                            </tr>
                            <?php endforeach ?>    
                </div>
            </div>
        </div>
    </div>
</div>