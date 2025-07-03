<style>
    form {
        max-width: 400px;
        margin: 2rem auto;
        padding: 1.5rem;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-family: Arial, sans-serif;
    }

    label {
        display: block;
        margin-bottom: 0.4rem;
        font-weight: bold;
    }

    input[type="text"],
    input[type="date"],
    select {
        width: 100%;
        padding: 0.5rem;
        margin-bottom: 1rem;
        border: 1px solid #999;
        border-radius: 4px;
        box-sizing: border-box;
    }

    select[multiple] {
        height: 100px;
    }

    button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 0.6rem 1.2rem;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1rem;
    }

    button:hover {
        background-color: #0056b3;
    }

    .note {
        font-size: 0.85rem;
        color: #555;
        margin-top: -0.8rem;
        margin-bottom: 1rem;
    }
</style>


<!--format-->
<form action="{{ url('/update/' . $assistant->id) }}" method="POST">
    @csrf
    <label for="name">Assistant Name: </label>
    <input type="text" name="name" id="name" value="{{$assistant->name}}" required>

    <label for="partner_companies">Partner Companies</label>
    <select name="partner_companies[]" id="partner_companies" multiple required> <!--php automatically converts [] to an array-->

        <option value="1">Company 1</option>
        <option value="2">Company 2</option>
        <option value="3">Company 3</option>
    </select>
    <div class="note">Hold Ctrl (Cmd on Mac) to select multiple</div>

    <label for="status">Status</label>
    <select name="status" id="status"  required>
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>

    <button type="submit">Update Assistant</button>




</form>
