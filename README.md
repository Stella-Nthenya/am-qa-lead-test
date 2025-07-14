# Thrive Themes - QA Team Lead Code Challenge

This project is a simple web application that suggests tags based on user input, with a focus on detecting keywords like **"WordPress"** and **"Marketing"**. The application is tested using [Codeception](https://codeception.com/) for acceptance testing and [Postman](https://www.postman.com/) for API validation.

---

## 🌟 Feature Overview
- Detects **"WordPress"** and **"Marketing"** keywords in user input (case-insensitive).
- Suggests relevant tags based on detected keywords.
- If both keywords are present, all matching tags are shown.
- If no relevant keywords are found, a fallback message is displayed.

---

## 📦 Source, Customization, and Bug Fix

This project was built using the HTML provided at [https://thrivethemes.com/challenges/qa/](https://thrivethemes.com/challenges/qa/).  
I used the provided HTML as a base and made the following changes:

- ✅ **Bug Fix**: Corrected a naming inconsistency between `contentForWordPress` and `contentForWordpress` that caused tag detection to fail.
- ✅ **Mock API**: Created a backend endpoint `api/smart-tags.php` to simulate AI-powered tag suggestions for use with Postman/Newman.
- ✅ **API Collection**: Developed a Postman collection to automate and validate the API logic.

---

## ✅ Test Coverage

| TC ID | Title                                | Category         |
|-------|--------------------------------------|------------------|
| TC1   | WordPress Keyword Detection          | ✅ Positive       |
| TC2   | Marketing Case Insensitive           | ✅ Positive       |
| TC3   | Empty Input                          | ❌ Negative       |
| TC4   | No Matching Keywords                 | ❌ Negative       |
| TC5   | Very Long Content                    | ⚠️ Boundary       |
| TC6   | Keywords with Special Characters     | ⚠️ Boundary       |
| TC7   | Both Keywords Present (WP Priority)  | 🔁 Logic Priority |

---

## ⚙️ Requirements
- PHP 8.1 or higher
- Composer
- Google Chrome
- ChromeDriver (matching your Chrome version)

---

## 🛠️ Installation

1. Clone the repository:
   ```bash
   git clone git@github.com:Stella-Nthenya/am-qa-lead-test.git
   cd am-qa-lead-test
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

---

## 🚀 Running the Application

Serve the HTML page using PHP’s built-in server:

```bash
php -S localhost:8000
```

Then visit:
```
http://localhost:8000/index.html
```

---

## 🔎 Running Automated Acceptance Tests

1. Start the server:
   ```bash
   php -S localhost:8000
   ```

2. Start ChromeDriver in another terminal:
   ```bash
   chromedriver
   ```
   You should see:
   ```
   ChromeDriver was started successfully on port 9515
   ```

3. Run the tests:
   ```bash
   vendor/bin/codecept run acceptance
   ```

---

## 🧪 API Testing with Postman

This project includes a Postman collection to test the `smart-tags.php` API endpoint.

### 📁 Collection File
- `Smart Tags Tests API collection.postman_collection.json`

### ▶️ How to Use
1. Open [Postman](https://www.postman.com/).
2. Click **Import**, and select the collection JSON file.
3. You will find 3 test cases:
   - ✅ WordPress keyword
   - ✅ Marketing keyword
   - ❌ Empty input (negative case)
4. Make sure your server is running at `http://localhost:8000/api/smart-tags`.

---

### 🧪 Run with Newman (CLI)

Install [Newman](https://www.npmjs.com/package/newman):

```bash
npm install -g newman
```

Run the collection:

```bash
newman run "Smart Tags Tests API collection.postman_collection.json"
```

Each request includes assertions to validate:
- HTTP status is `200 OK`
- `suggested_tags` array is returned
- Tags match expected results or show the correct error

---

## 📂 File Structure

```
.
├── api/
│   └── smart-tags.php                # Mock API endpoint
├── index.html                        # Frontend UI test page
├── tests/
│   ├── Acceptance/
│   │   └── SmartTagCest.php          # Codeception UI tests
├── Smart Tags Tests API collection.postman_collection.json
├── README.md
```

---

## 👤 Author
Created by **Stella Nthenya**  
QA Engineer | Thrive Themes Code Challenge  
Built with ❤️ using **Codeception** + **Postman**
