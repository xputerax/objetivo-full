<!-- Action Plan Modal -->
<div class="modal fade" id="actionPlanModal" tabindex="-1" aria-labelledby="actionPlanModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="actionPlanModal">
                    Eat 2000 calories daily
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> <!-- / .modal-header -->
            <div class="modal-body">
                <!-- Action Plan Description -->
                <div class="action-plan-description">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                        sapiente cumque consequuntur sed numquam, laudantium repudiandae
                        itaque doloremque sint molestias assumenda dignissimos, quam
                        accusamus, a voluptas. Neque quaerat aliquid beatae?
                    </p>
                </div>
                <br />

                <!-- Activities Container -->
                <div class="activities-container">
                    <h5 class="activities-title">Activities</h5>
                    <hr />

                    <!-- List of Activities -->
                    <div class="activity-container">
                        <ul class="list-group" id="list">
                            <!-- Placeholder #1 -->
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                                Cook 150g of steak
                            </li>
                        </div>

                        <!-- Placeholder 2 -->
                        <div class="activity-container">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                                Cook 50g of chicken breast
                            </li>
                        </div>

                        <input class="form-control" placeholder="Add activity" type="text" id="inputText">
                        <button type="button" onclick="addList()" class="btn btn-light btn-sm">+</button>
                    </ul>
                </div>
                <br />
            </div> <!-- / .modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>
