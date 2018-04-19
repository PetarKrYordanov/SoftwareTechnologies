package Arrays;

import java.util.*;

public class Phonebook {
    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        TreeMap<String, String> phonebookEntries = new TreeMap<>();
        while (true) {
            String input = scanner.nextLine();
            if (input.equals("END")) {
                break;
            }

            String[] commandTokens = input.split(" ");
            if (commandTokens[0].equals("A")) {
                phonebookEntries.put(commandTokens[1], commandTokens[2]);
            } else if (commandTokens[0].equals("S")) {
                if (phonebookEntries.containsKey(commandTokens[1])) {
                    String number = phonebookEntries.get(commandTokens[1]);
                    System.out.printf("%s -> %s%n", commandTokens[1], number);
                } else {
                    System.out.printf("Contact %s does not exist.%n", commandTokens[1]);
                }
            } else  if (input.equals("ListAll")){
                for (Map.Entry<String, String> entry : phonebookEntries.entrySet()) {
                    System.out.printf("%s -> %s%n",entry.getKey(),entry.getValue());
                }
            }
        }
    }
}
