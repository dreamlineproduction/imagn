<!-- Edit Widget Modal -->
<div class="modal fade" id="widget-title" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="widget-titleLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="widget-titleLabel">MY IDENTITY INSPIRATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" id="widget-title" aria-describedby="titlelHelp"
                            placeholder="Enter Title" value="MY IDENTITY INSPIRATION">

                    </div>
                    <div class="mb-3">
                        <label for="widget-area-description" class="form-label">Description</label>
                        <textarea class="form-control" id="widget-area-description" rows="7">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- Add new section Modal -->
<div class="modal fade" id="add-new-widget" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="widget-titleLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="widget-titleLabel">Create New Widget</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Select Widget Type</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Select from this list</option>
                            <option value="1">Text</option>
                            <option value="2">Image</option>
                            <option value="3">Video</option>
                            <option value="3">Pool</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="widget-area-description" class="form-label">Description</label>
                        <textarea class="form-control" id="widget-area-description" rows="7">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- Edit top section widget Modal -->
<div class="modal fade" id="top-widget1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="top-widget1Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="top-widget1Label">Edit Widget</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
  <div class="mb-3">
    <label for="widget-title" class="form-label">Title</label>
    <input type="text" class="form-control" id="widget-title" placeholder="Enter title" value="My Money, My Income">
    
  </div>
  <div class="mb-3">
    <label for="widget-sub-title" class="form-label">Sub Title</label>
    <input type="text" class="form-control" id="widget-sub-title" placeholder="Enter sub-title" value="Inbound Medic (Founder)">
    
  </div>
  <div class="mb-3">
    <label for="widget-url" class="form-label">URL</label>
    <input type="url" class="form-control" id="widget-url" placeholder="Enter url" value="https://www.inboundmedic.com">
        <div id="widget-urlHelp" class="form-text">Include fulll url (e.g https://www.example.com)</div>
    
  </div>
  <div class="mb-3">
    <label for="widget-description" class="form-label">Description</label>
    <textarea class="form-control" id="widget-description" rows="3">I help elite medical practices get more new patients through Google.</textarea>
    
  </div>
  <div class="mb-3">
    <label for="widget-btn-name" class="form-label">Button Name</label>
    <input type="text" class="form-control" id="widget-btn-name" placeholder="Enter button name" value="Schedule A Strategy Session">
    
  </div>

  <div class="mb-3">
    <label for="widget-btn-url" class="form-label">Button URL</label>
    <input type="url" class="form-control" id="widget-btn-url" placeholder="Enter button url" value="www.inboundmedic.com">
    <div id="widget-btn-urlHelp" class="form-text">Include fulll url (e.g https://www.example.com)</div>
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
     
    </div>
  </div>
</div>

<!-- Edit top section widget Modal -->
<div class="modal fade" id="personal-info" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="personal-info1Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="personal-info1Label">Edit Personal Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
  <div class="mb-3">
    <label for="user-name" class="form-label">Name*</label>
    <input type="text" class="form-control" id="user-name" placeholder="Enter name" value="Dev Chatterjee" required>
    
  </div>
  <div class="mb-3">
    <label for="user-heading" class="form-label">Heading</label>
    <input type="text" class="form-control" id="user-heading" placeholder="Enter heading" value="Artist | Entrepreneur | Fool Creating The Next Social Network And Pissing Off The Entire World">
    
  </div>
  <div class="mb-3">
    <label for="user-country" class="form-label">Country*</label>
    <?php include 'parts/country.php'; ?>
  </div>
 
  <div class="mb-3">
    <label for="user-city" class="form-label">City</label>
    <input type="text" class="form-control" id="user-city" placeholder="Enter city name" value="NY">
    
  </div>
  <div class="mb-3">
    <label for="user-hobbies" class="form-label">Hobbies <small>Use comma or tab to enter new</small></label>
    <input type="text" class="form-control" value="" data-role="tagsinput" placeholder="Add hobbies" />
    
  </div>

 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
     
    </div>
  </div>
</div>


<!-- Upload Avatar Modal -->
<div class="modal fade" id="upload-avatar" tabindex="-1" aria-labelledby="upload-avatarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Upload Profile Photo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="dropzone" id="myDropzone"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>