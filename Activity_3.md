# Hands-on Activities 3/3

## Activity 3: Pull Requests and Merging

**Objective:** Master the professional team workflow by proposing changes through GitHub, participating in peer review, and integrating your **PHP utility code** into the production-ready branch.

**Prerequisites**
Before starting, make sure your local development is complete and your work is available on the remote server:

* All changes for your feature (e.g., `util.php`) must be committed to your local feature branch.
* Your feature branch must be uploaded to GitHub so it is visible to the team:

```bash
git push origin feature/add-php-util
```

---

### Step 1: Initiate the Pull Request (PR)

After pushing the branch, navigate to your repository on GitHub to start the formal proposal.
Click the green **"Compare & pull request"** button at the top of the repository page.

The PR acts as a "waiting room" where your code is inspected before it is allowed to touch the `main` branch.

---

### Step 2: Draft a Professional Proposal

Provide context so your teammates understand the purpose of your code changes.
Enter a clear title (e.g., *Add PHP Utility Functions*) and a description explaining the **why** and **how**.
Link any relevant tasks by typing `#1` (or the specific issue number) to automatically close the issue upon merging.

---

### Step 3: Review and Iterate

In a team environment, reviewers will examine your work via the **"Files changed"** tab.
They may leave **line comments** or **suggest changes** directly on your code.

If changes are requested, edit the file locally, commit, and push again to the same branch. The existing PR will update automatically.

---

### Step 4: Merge and Cleanup

Once the code is approved and automated status checks pass, finalize the integration.
On GitHub, click **"Merge pull request"** to combine the feature branch into `main`.
Then click **"Delete branch"** to keep the remote repository organized.

---

### Step 5: Sync Your Local Environment

Update your local computer to match the remote `main` branch:

```bash
git checkout main
git pull origin main
```

This ensures your next feature development starts from the most up-to-date version of the project. ✅
