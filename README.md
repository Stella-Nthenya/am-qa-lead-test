# Thrive Themes - QA Team Lead Code Challenge
This project is a simple web application that suggests tags based on user input, with a focus on detecting keywords like **"WordPress"** and **"Marketing"**. The application is tested using [Codeception](https://codeception.com/) for acceptance testing.

## Feature Overview
- Detects **"WordPress"** and **"Marketing"** keywords in user input (case-insensitive).
- Suggests relevant tags based on detected keywords.
- Prioritizes **WordPress** tags if both keywords are present.

## Fix Summary ✅ 
This project was built from the provided HTML at [https://thrivethemes.com/challenges/qa/](https://thrivethemes.com/challenges/qa/)

**Bug Fixed**: A variable naming mismatch (`contentForWordPress` vs `contentForWordpress`) caused tag detection to break.  
✅ Fix: Renamed all instances to use consistent casing (`contentForWordpress`)  
✅ Tested locally — tag suggestion logic now works as expected.

## Test Coverage (Automated)
| TC ID | Title                                | Category         |
|-------|--------------------------------------|------------------|
| TC1   | WordPress Keyword Detection          | ✅ Positive       |
| TC2   | Marketing Case Insensitive           | ✅ Positive       |
| TC3   | Empty Input                          | ❌ Negative       |
| TC4   | No Matching Keywords                 | ❌ Negative       |
| TC5   | Very Long Content                    | ⚠️ Boundary       |
| TC6   | Keywords with Special Characters     | ⚠️ Boundary       |
| TC7   | Both Keywords Present (WP Priority)  | 🔁 Logic Priority |


## ⚙️ Requirements
- PHP 8.1 or higher
- Composer
- Google Chrome
- ChromeDriver (matching your Chrome version)

## Installation
1. Clone the repository:
   ```bash
   git clone [This Repo](git@github.com:Stella-Nthenya/am-qa-lead-test.git)
   cd am-qa-lead-test
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

## 🚀 Running the Application
Serve the `index.html` using PHP’s built-in server:
```bash
php -S localhost:8000
```
Then open your browser at:
```
http://localhost:8000/index.html
```

## Running Automated Tests

1. Start the PHP server (to serve the test page):
   ```bash
   php -S localhost:8000
   ```

2. In a separate terminal, start ChromeDriver:
   ```bash
   chromedriver
   ```
   You should see output like:
   ```
   ChromeDriver was started successfully on port 9515
   ```

3. Run the Codeception acceptance tests:
   ```bash
   vendor/bin/codecept run acceptance
   ```

✅ Make sure your Chrome browser is installed and the ChromeDriver version matches your browser version. You can download it from https://chromedriver.chromium.org/downloads.


## 🧹 Clean Repo Notes
This repository excludes the following auto-generated files:
- `/vendor/`
- `/node_modules/`
- `/tests/_output/`

Use `composer install` after cloning to regenerate dependencies.

## Author
Created as part of a QA Code Challenge  
Tested using **Codeception** with WebDriver (Chrome + ChromeDriver)
