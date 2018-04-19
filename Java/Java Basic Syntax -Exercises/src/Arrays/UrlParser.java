package Arrays;

import java.util.Scanner;

public class UrlParser {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String inputUrl = scanner.nextLine();
        String protocol = "\"\"";

        if (inputUrl.contains("://")) {
            String[] protocolToken = inputUrl.split("://");

            System.out.println("[protocol] = " + "\""+ protocolToken[0] + "\"");
            printProtocolAndResources(protocolToken[1]);
        }
        else {
            System.out.println("[protocol] = " + protocol);
            printProtocolAndResources(inputUrl);
        }
    }

    private static void printProtocolAndResources(String url) {

        String resources = "\"\"";

        if (url.lastIndexOf("/") > -1) {
            int indexDivideProtocolAndResourses =url.indexOf("/");
            System.out.println("[server] = " +  "\""+url
                    .substring(0, indexDivideProtocolAndResourses) +"\"");

            resources = url.substring(indexDivideProtocolAndResourses + 1, url.length());
            System.out.println("[resource] = " +  "\""+resources+ "\"");
        }
        else {
            System.out.println("[server] = " +  "\""+url + "\"");
            System.out.println("[resource] = "+ resources);
        }
    }
}
