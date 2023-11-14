

$(document).ready(function () {
    // .post() => messeges <div> /.....<:>
    //var diverror = $axios.post();
    // $("#erro") .happen().
    // load pop <->
    // .get
    $("form.block-form").submit(function (event) {
        var missingFields = [];

        $(this).find(".required-field-input").each(function () {
            var value = $.trim($(this).val());
            if (value === "") {
                var label = $(this).closest(".form-group").find(".form-label").text();
                label = label.toLowerCase();
                missingFields.push(label);
            }
        });

        var checkboxValue = $(".CGs").is(":checked");
        if (!checkboxValue) {
            missingFields.push("conditions générales");
        }

        if (missingFields.length > 0) {
            event.preventDefault();
            var missingFieldsText = missingFields.join(", ");
            var modalContent = `
            <div class="modal fade" id="ModalMissingFields" tabindex="-1" role="dialog" aria-labelledby="ModalMissingFieldsLabel" aria-hidden="true">
                <div class="modal-dialog modal-perso" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title block-title no-bottom mx-auto" id="ModalMissingFieldsLabel">Champ(s) manquant(s)</h5>
                        </div>
                        <div class="modal-body">
                            <p class="text-modal-input">Il manque le(s) champs suivant(s) :<br><b> ${missingFieldsText} </b></p>
                            <p class="text-modal-input">Merci de bien vouloir compléter les informations manquantes.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button-secondary" data-dismiss="modal">Retour</button>
                        </div>
                    </div>
                </div>
            </div>
            `;
            $("body").append(modalContent);
            $("#ModalMissingFields").modal("show");
        }

        $('#ModalMissingFields').on('hidden.bs.modal', function () {
            $("#missingFieldsText").empty();
        });

        $('#ModalMissingFields .modal-footer button[data-dismiss="modal"]').on('click', function () {
            $("#ModalMissingFields").modal("hide");
        });

        $('#ModalMissingFields').on('hidden.bs.modal', function () {
            $(this).remove();
        });
    });
});








