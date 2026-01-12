### Activity 1: Your First Git Repository & Proper Git Workflow

**Objective**: Master the full **local-to-remote workflow** by initializing a local repository, tracking your **PHP project** with Git, and pushing it to GitHub for remote storage. 🚀

---

#### Step 1: Initialize the Local Repository

Git must be set up in your project folder to track changes.

* **Navigate** to your project folder using the terminal or PowerShell:

```bash
cd path/to/your/project
```

* **Initialize Git**:

```bash
git init
```

* **Insight**: This creates a hidden **`.git`** folder that stores your version history. Without it, your folder is **not yet a Git repository**.

---

#### Step 2: Create and Modify PHP Files

You need content to track before committing.

* **Action**: Create your main project file:

```bash
index.php
README.md
```

* **Insight**: Git sees these files as **untracked**, meaning they exist locally but are not yet part of version control.

---

#### Step 3: Stage Your Changes

Select which files will be included in your next snapshot.

* **Command**:

```bash
git add .
```

> The `.` stages **all files in the current folder**.

* **Insight**: Files move from the **Working Directory** → **Staging Area**. Think of it as a "pre-commit checklist."

---

#### Step 4: Commit Your Changes

A commit is a **permanent snapshot** of your project at a specific point.

* **Command**:

```bash
git commit -m "Initial commit: Set up PHP project structure"
```

* **Insight**: Use **present tense** in commit messages (e.g., "Add" instead of "Added") for professional consistency.

---

#### Step 5: Create a Remote Repository on GitHub

Prepare a destination for your code online.

* **Action**: Log into GitHub → click the **"+"** → **New repository**.
* **Action**: Name your repository (e.g., `php-app-practice`) → click **Create repository**.

> ❌ Do **not** add a license or `.gitignore` at this stage.

---

#### Step 6: Connect Local to Remote

Link your local project to GitHub.

* **Command**:

```bash
git remote add origin <your-repository-URL>
```

* **Insight**: `"origin"` is the **default name** for your primary remote repository.

---

#### Step 7: Push to GitHub

Upload your local commits to GitHub.

* **Rename branch to `main`**:

```bash
git branch -M main
```

* **Push commits**:

```bash
git push -u origin main
```

* **Insight**:
  The `-u` flag sets the **upstream branch**, so future pushes can be done simply with:

```bash
git push
```

---

✅ **Pro Tip**: After this setup, every time you make changes, you only need:

```bash
git add .
git commit -m "Describe changes"
git push
```

This keeps your workflow **simple and consistent**.