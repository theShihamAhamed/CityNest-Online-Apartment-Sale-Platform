function editlistingAdmin(apartmentId, title, discription, bedrooms, bathrooms, furnishedStatus, price, address, whatsappLink) {
    const content = document.getElementById('editContainer');
    content.innerHTML = `
        <div class="add-listing-form">
            <button class="closeBtn" onclick="closePopup()">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <h1 class="form-title">Edit Listing</h1>
            <form action="editListing_process.php" method="post" >
                <div class="form-group">
                    <label for="apartment_id">ID:</label>
                    <input type="text" id="apartmentId" name="apartment_id" class="form-input" value="${apartmentId}" readonly>
                </div>

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" class="form-input" value="${title}" required>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="discription" class="form-description" rows="5" required>${discription}</textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="no_of_bedrooms">No Bedroom:</label>
                        <select id="bedrooms" name="no_of_bedrooms" class="form-input">
                            <option value="1" ${bedrooms == 1 ? 'selected' : ''}>1</option>
                            <option value="2" ${bedrooms == 2 ? 'selected' : ''}>2</option>
                            <option value="3" ${bedrooms == 3 ? 'selected' : ''}>3</option>
                            <option value="4" ${bedrooms == 4 ? 'selected' : ''}>4</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="no_of_bathroom">No Bathroom:</label>
                        <select id="bathrooms" name="no_of_bathroom" class="form-input">
                            <option value="1" ${bathrooms == 1 ? 'selected' : ''}>1</option>
                            <option value="2" ${bathrooms == 2 ? 'selected' : ''}>2</option>
                            <option value="3" ${bathrooms == 3 ? 'selected' : ''}>3</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Is Furnished:</label>
                    <div>
                        <input type="radio" id="furnished-yes" name="furnished_status" value="Furnished" ${furnishedStatus === 'Furnished' ? 'checked' : ''}>
                        <label for="furnished-yes">Yes</label>
                        <input type="radio" id="furnished-no" name="furnished_status" value="Unfurnished" ${furnishedStatus === 'Unfurnished' ? 'checked' : ''}>
                        <label for="furnished-no">No</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" step="0.01" id="price" name="price" class="form-input" value="${price}" required>
                </div>

                <div class="form-group">
                    <label for="apart_address">Address:</label>
                    <input type="text" id="address" name="apart_address" class="form-input" value="${address}" required>
                </div>

                <div class="form-group">
                    <label for="whatsappLink">Whatsapp link:</label>
                    <input type="text" id="whatsappLink" name="whatsappLink" class="form-input" value="${whatsappLink}">
                </div>

                <div class="form-buttons">
                    <button type="submit" class="form-submit-btn">Save</button>
                </div>
            </form>
        </div>
    `;

    content.style.display = 'block';
    document.querySelector('.modal-overlay').style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closePopup() {
    const content = document.getElementById('editContainer');
    content.style.display = 'none';
    document.querySelector('.modal-overlay').style.display = 'none';
    document.body.style.overflow = 'auto';

}
