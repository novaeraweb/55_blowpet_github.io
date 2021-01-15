
        <div class="wrap">
                <!-- Right modal -->
            <div class="modal">
              <input id="modal-trigger-right" class="checkbox" type="checkbox">
              <div class="modal-overlay">
                <label for="modal-trigger-right" class="o-close"></label>
                <div class="modal-wrap from-right">
                  <label for="modal-trigger-right" class="close">&#10006;</label>
                  <h3>Envie seus dados que entraremos em contato!</h3>
                  <form action="phpmailer/enviar.php" method="post" name="form-envia" class="form-envia">
                        <p><input type="text" name="nome" placeholder="Seu Nome" required> *</p>
                        <p><input type="text" name="email" placeholder="E-mail" required> *</p>
                        <p><input type="text" name="celular" placeholder="(DDD) Celular" required> *</p>
                        <p><input type="text" name="cidade" placeholder="Cidade">
                        <button type="submit">Enviar</button>
                  </form>
                  <p>* campos obrigatórios</p>
                </div>
              </div>
            </div>
            <!-- End Modal -->
        </div>