
package bankaccount;

public class checkingAccount extends Account{
    private String acctTypeNo; 
   
     @Override
    public void endOfMonth() {
        int fee = -10;
        if (balance < 1000) {
            addTransaction(fee);
        }
    }

    @Override
    public String getAccountNum() {
        acctTypeNo = "Checking Acct no. " + super.getAccountNum();
        return acctTypeNo;
    }

    @Override
    public void print() {
        System.out.println("I am a checking account, my balance is $" + balance);
    }

}
