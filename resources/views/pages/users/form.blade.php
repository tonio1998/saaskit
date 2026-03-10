<form>

    <div class="row g-3">

        <div class="col-md-6">

            <label class="form-label">Name</label>

            <input
                type="text"
                class="form-control"
                placeholder="Enter name"
            />

        </div>

        <div class="col-md-6">

            <label class="form-label">Email</label>

            <input
                type="email"
                class="form-control"
                placeholder="Enter email"
            />

        </div>

        <div class="col-md-6">

            <label class="form-label">Role</label>

            <select class="form-select">

                <option>Admin</option>
                <option>Staff</option>
                <option>User</option>

            </select>

        </div>

        <div class="col-md-6">

            <label class="form-label">Password</label>

            <input
                type="password"
                class="form-control"
                placeholder="Enter password"
            />

        </div>

    </div>

    <div class="mt-4">

        <button class="btn btn-primary">
            Save User
        </button>

        <a href="/users" class="btn btn-light">
            Cancel
        </a>

    </div>

</form>
