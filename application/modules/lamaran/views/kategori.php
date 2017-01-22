<br/>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h4><b>Kategori</b></h4>
                    </li>
                    
                    <div class="panel-body">
                        <?php 
                            echo form_open('Lamaran/tampil_lamaran_by_kategori/', array('clas' => 'form-horizontal'));
                            ?>
                            <label class="control-label col-md-9">
                                <?php 
                                echo form_dropdown('kategori', $kategori,'', array('class' => 'form-control', 'id' => 'kategori')); 
                               
                                ?>
                            </label>

                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary "><i class="fa fa-search"></i></button>
                            </div>
                            <?php
                            echo form_close(); 
                         ?>
                    </div>
                </ul>

                <ul class="list-group">
                    <li class="list-group-item">
                        <h4><b>Kota</b></h4>
                    </li>
                    
                    <div class="panel-body">
                        <?php 
                            echo form_open('Lowongan/tampil_lowongan_by_kategori/', array('clas' => 'form-horizontal'));
                            ?>
                            <label class="control-label col-md-9">
                                <?php 
                                echo form_dropdown('kota', $kota,'', array('class' => 'form-control', 'id' => 'kota')); 
                               
                                ?>
                            </label>

                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary "><i class="fa fa-search"></i></button>
                            </div>
                            <?php
                            echo form_close(); 
                         ?>
                    </div>
                </ul>