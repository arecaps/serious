package bankaccount;

import java.util.Random;

public abstract class Account {
    protected int balance;
    protected long acctNo;
    protected String acctNum;
    
    public int getBalance(){
        return balance;
    }
    public void addTransaction(int amount){
        balance += amount;
    }
    public long addAccountNo(){
        acctNo = new Random().nextInt(100000000)+15287635;
        return acctNo;
    }
    public String getAccountNum(){
        acctNum = "" + addAccountNo();
        return acctNum;
    }
    public abstract void endOfMonth();
}

