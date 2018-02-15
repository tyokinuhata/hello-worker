<!-- Button -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">出勤</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>出勤しますか?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<style lang="scss" scoped>
    .modal-header {
        border-bottom: none;
    }
    .modal-body {
        p {
            margin-bottom: 0;
        }
    }
    .modal-footer {
        border-top: none;
    }
</style>