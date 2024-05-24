Overview
ABC Bank Application is a comprehensive banking system that manages Savings, Checking, and Investment accounts. This application supports various operations such as account management, transaction processing, and interest calculations. The application is designed to interact with a MySQL database for data storage and retrieval.

Database Information
Database Name: dbvpny1qngaxgp
Database User ID: quickme1_4211
Database Password: csci4211
Account Types
Savings Account
Checking Account
Investment Account
Database Table Structures
Savings Account
Savings Account Table

Fields: Account ID, Account Holder Name, Balance, Interest Rate, etc.
Savings Transactions Table

Fields: Transaction ID, Account ID, Transaction Type (Deposit, Withdrawal, Transfer, Interest Calculation), Amount, Transaction Date, etc.
Checking Account
Checking Account Table

Fields: Account ID, Account Holder Name, Balance, etc.
Checking Transactions Table

Fields: Transaction ID, Account ID, Transaction Type (Deposit, Withdrawal, Transfer), Amount, Transaction Date, etc.
Investment Account
Investment Account Table

Fields: Account ID, Account Holder Name, Balance, Interest Rate, etc.
Investment Transactions Table

Fields: Transaction ID, Account ID, Transaction Type (Deposit, Interest Calculation), Amount, Transaction Date, etc.
Features
Login System

User authentication to access the banking system.
Logout System

Securely logout from the banking system.
Savings Account Operations

Insert new savings account.
Update existing savings account details.
Display savings account information.
Delete a savings account.
Search for savings account details.
Checking Account Operations

Insert new checking account.
Update existing checking account details.
Display checking account information.
Delete a checking account.
Search for checking account details.
Investment Account Operations

Insert new investment account.
Update existing investment account details.
Display investment account information.
Delete an investment account.
Search for investment account details.
Savings Transactions Operations

Insert new transaction.
Update existing transaction details.
Display transaction information.
Delete a transaction.
Search for transaction details.
Checking Transactions Operations

Insert new transaction.
Update existing transaction details.
Display transaction information.
Delete a transaction.
Search for transaction details.
Investment Transactions Operations

Insert new transaction.
Update existing transaction details.
Display transaction information.
Delete a transaction.
Search for transaction details.
Transaction Types
Checking Transactions
Deposit: Adds the deposit amount to the checking balance.
Withdrawal: Deducts the withdrawal amount from the checking balance.
Transfer: Deducts the transfer amount from the checking balance.
Savings Transactions
Deposit: Adds the deposit amount to the savings balance.
Withdrawal: Deducts the withdrawal amount from the savings balance.
Transfer: Deducts the transfer amount from the savings balance.
Interest Calculation: Monthly interest is added to the savings balance.
Investment Transactions
Deposit: Adds the deposit amount to the investment balance.
Interest Calculation: Monthly interest is added to the investment balance.
Interest Calculation
Savings Account: New Balance = Current Balance + (Current Balance * Interest Rate)
Investment Account: New Balance = Current Balance + (Current Balance * Interest Rate)
Daily Summary
Print summaries for Checking, Savings, and Investment accounts.
List all transactions.
Display interest accrued for the day.
Usage Instructions
Clone the Repository

bash
Copy code
git clone <repository-url>
Set Up the Database

Create the database and tables using the provided schema.
Configure Database Connection

Update the database connection settings in the application configuration file with the provided credentials.
Run the Application

Start the application server.
Access the Application

Open your browser and navigate to the application URL.
Use the login credentials to access the system.
Perform Operations

Use the application interface to manage accounts and transactions as required.
Conclusion
This ABC Bank Application provides a robust and secure way to manage various banking operations. Follow the instructions carefully to set up and use the system effectively. For any issues or questions, please refer to the documentation or contact the support team.
