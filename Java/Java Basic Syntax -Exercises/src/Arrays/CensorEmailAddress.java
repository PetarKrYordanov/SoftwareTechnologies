package Arrays;

import java.util.Arrays;
import java.util.Scanner;

public class CensorEmailAddress {
    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);
        String email = scanner.nextLine();

        String inptutText = scanner.nextLine();
        String[] emailTokens = email.split("@");
        int usernameLength = emailTokens[0].length();
        StringBuilder builder = new StringBuilder();
        for (int i = 0; i < usernameLength; i++) {
            builder.append('*');
        }
        String censoredEmail =builder.toString() + "@" + emailTokens[1];

        System.out.println(inptutText.replaceAll(email, censoredEmail));
    }
}
