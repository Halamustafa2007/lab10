# LAB 10 - PHP Web Applications

This repository contains the three PHP applications required for Lab 10.

## Folder structure

- `Question_A_Session/` - Name input, session-based welcome page, start time, logout and usage duration.
- `Question_B_Date_Time/` - Displays the current date, time and day using PHP.
- `Question_C_Age_Verification/` - Accepts a name and age and displays the appropriate access message.

## How to run

1. Install and open XAMPP.
2. Start **Apache**.
3. Copy the `LAB10_PHP` folder into `C:\xampp\htdocs`.
4. Open the following URLs in your browser:

   - A: `http://localhost/LAB10_PHP/Question_A_Session/`
   - B: `http://localhost/LAB10_PHP/Question_B_Date_Time/datetime.php`
   - C: `http://localhost/LAB10_PHP/Question_C_Age_Verification/`

## Notes

- Question A uses PHP sessions to store the user's name and start time.
- Question B uses the `date()` function and the `Asia/Kolkata` timezone.
- Question C uses a POST form and checks whether the entered age is below 18.
