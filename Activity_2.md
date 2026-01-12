# Hands-on Activities 2/3

## Activity 2: Cloning and Branching

**Objective:** Practice downloading an existing project from a remote server and creating isolated **"parallel universes"** (branches) to develop new **PHP utility scripts** without affecting the stable codebase. 🚀

---

### Step 1: Clone the Repository

Download a copy of the existing project to your local machine instead of starting from scratch. Navigate into the newly created folder.

```bash
git clone https://github.com/scbalanlay-bnty/GithubTraining.git
cd GithubTraining
```

This creates a local directory already linked to the remote repository on GitHub.

---

### Step 2: Create a Feature Branch

To keep the `main` branch stable, always perform new work on a separate branch.

```bash
git checkout -b feature/add-php-util
```

The `-b` flag both creates the branch and moves your working pointer to it.

---

### Step 3: Develop and Commit Locally

Work on your PHP utility files within this isolated branch. Create a new file named `util.php`, stage your changes, and commit them.

```bash
git add .
git commit -m "Add new util.php for general utility functions"
```

These changes exist only on your feature branch and do not affect `main` yet.

---

### Step 4: Switch Back to Main

Return to your primary branch before merging.

```bash
git checkout main
```

Notice that `util.php` is not visible here; it remains safely stored on the feature branch.

---

### Step 5: Merge the Changes

Combine your feature branch work into the main branch.

```bash
git merge feature/add-php-util
```

Your `main` branch is now updated with the utility code developed in the feature branch. ✅

---

### Step 6: Cleanup

After merging, delete the temporary branch to keep your repository organized.

```bash
git branch -d feature/add-php-util
```
