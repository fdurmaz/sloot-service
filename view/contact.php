<div id="header-contact" class="jumbotron jumbotron-fluid header">
    <div class="container">
        <h1 class="display-3">Contact</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed augue</p>
    </div>
</div>

<div class="container">
    <form id="contact-form" method="post" action="../assets/php/contact" role="form">

        <div class="messages"></div>

        <div class="controls">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_name">Voornaam *</label>
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Uw voornaam *" required="required" data-error="Firstname is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_lastname">Achternaam *</label>
                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Uw achternaam *" required="required" data-error="Lastname is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_email">E-mailadres *</label>
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Uw e-mailadres *" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_message">Bericht *</label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="Uw bericht *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="submit" class="btn btn-success btn-send" value="Verzenden">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-muted">
                        <strong>*</strong> Deze velden zijn verplicht.
                </div>
            </div>
        </div>
    </form>
</div>