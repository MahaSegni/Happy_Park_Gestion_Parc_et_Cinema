/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.l10n.DateFormat;
import com.codename1.l10n.ParseException;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.Abonne;
import com.mycompany.myapp.entities.Reclamation;
import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Map;
/**
 *
 * @author dell
 */
public class ServiceReclamation {
      public ArrayList<Reclamation> tasks;
    
    public static ServiceReclamation instance=null;
    public boolean resultOK;
    private ConnectionRequest req;

    public ServiceReclamation() {
         req = new ConnectionRequest();
    }

    public static ServiceReclamation getInstance() {
        if (instance == null) {
            instance = new ServiceReclamation();
        }
        return instance;
    }
    //+ "&abonne=" + r.getAbonne()
      public boolean AjoutReclamation(Reclamation r) {
        String Url = Statics.BASE_URL +"/addmob?field="+ r.getField()+ "&rate=" + r.getRate()+ "&description=" + r.getDescription()+ "&datee=" + r.getDatee()+"&abonne="+r.getAbonne_id();
        req.setPost(true);
        req.setUrl(Url);// Insertion de l'URL de notre demande de connexion
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
             
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                
                req.removeResponseListener(this); //Supprimer cet actionListener
                /* une fois que nous avons termin?? de l'utiliser.
                La ConnectionRequest req est unique pour tous les appels de 
                n'importe quelle m??thode du Service task, donc si on ne supprime
                pas l'ActionListener il sera enregistr?? et donc ??x??cut?? m??me si 
                la r??ponse re??ue correspond ?? une autre URL(get par exemple)*/
                
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
//         public void AjoutReclamation(Reclamation r) {
////http://127.0.0.1:8001/addmob?field="cinema"&description="test"&datee="2021-04-20 10:10:06"&rate=0.2
//            
//        //Statics.BASE_URL + "/article?Libelle=" + t.getLibelle() + "&image_article" + t.getImage_article() + "&prix" + t.getPrix() + "&qt_article" + t.getQt_article() + "&ref" + t.getRef() + "&rate" + t.getRate()
//        String Url = Statics.BASE_URL +"/addmob?field"+ r.getField()+ "&rate=" + r.getRate()+ "&description=" + r.getDescription()+ "&datee=" + r.getDatee();// cr??ation de l'URL
//       req.setUrl(Url);// Insertion de l'URL de notre demande de connexion
//        req.addResponseListener(new ActionListener<NetworkEvent>() {
//            @Override
//            public void actionPerformed(NetworkEvent evt) {
//             
//                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
//                req.removeResponseListener(this); //Supprimer cet actionListener
//                /* une fois que nous avons termin?? de l'utiliser.
//                La ConnectionRequest req est unique pour tous les appels de 
//                n'importe quelle m??thode du Service task, donc si on ne supprime
//                pas l'ActionListener il sera enregistr?? et donc ??x??cut?? m??me si 
//                la r??ponse re??ue correspond ?? une autre URL(get par exemple)*/
//                
//           }
//        });
//        NetworkManager.getInstance().addToQueueAndWait(req);
//        return resultOK;
//    }

   /* public boolean addTask(Reclamation t) {
        String url = Statics.BASE_URL + "/tasks/" + t.getName() + "/" + t.getStatus(); //cr??ation de l'URL
        req.setUrl(url);// Insertion de l'URL de notre demande de connexion
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
             
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this); //Supprimer cet actionListener
                /* une fois que nous avons termin?? de l'utiliser.
                La ConnectionRequest req est unique pour tous les appels de 
                n'importe quelle m??thode du Service task, donc si on ne supprime
                pas l'ActionListener il sera enregistr?? et donc ??x??cut?? m??me si 
                la r??ponse re??ue correspond ?? une autre URL(get par exemple)*/
                
         /*   }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }*/

    public ArrayList<Reclamation> parseTasks(String jsonText){
        try {
            tasks=new ArrayList<>();
            JSONParser j = new JSONParser();// Instanciation d'un objet JSONParser permettant le parsing du r??sultat json

            /*
                On doit convertir notre r??ponse texte en CharArray ?? fin de
            permettre au JSONParser de la lire et la manipuler d'ou vient 
            l'utilit?? de new CharArrayReader(json.toCharArray())
            
            La m??thode parse json retourne une MAP<String,Object> ou String est 
            la cl?? principale de notre r??sultat.
            Dans notre cas la cl?? principale n'est pas d??finie cela ne veux pas
            dire qu'elle est manquante mais plut??t gard??e ?? la valeur par defaut
            qui est root.
            En fait c'est la cl?? de l'objet qui englobe la totalit?? des objets 
                    c'est la cl?? d??finissant le tableau de t??ches.
            */
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
              /* Ici on r??cup??re l'objet contenant notre liste dans une liste 
            d'objets json List<MAP<String,Object>> ou chaque Map est une t??che.               
            
            Le format Json impose que l'objet soit d??finit sous forme
            de cl?? valeur avec la valeur elle m??me peut ??tre un objet Json.
            Pour cela on utilise la structure Map comme elle est la structure la
            plus ad??quate en Java pour stocker des couples Key/Value.
            
            Pour le cas d'un tableau (Json Array) contenant plusieurs objets
            sa valeur est une liste d'objets Json, donc une liste de Map
            */
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            
            //Parcourir la liste des t??ches Json
            for(Map<String,Object> obj : list){
                //Cr??ation des t??ches et r??cup??ration de leurs donn??es
                Reclamation t = new Reclamation();
               t.setAbonne(obj.get("abonne").toString()); 
               t.setIdrec(((int)Float.parseFloat(obj.get("idrec").toString())));
                t.setDescription(obj.get("description").toString());
                t.setField(obj.get("field").toString());
                t.setDatee(obj.get("datee").toString());
            //    t.setAbonne(obj.get("abonne").toString());
                t.setRate(Double.parseDouble(obj.get("rate").toString()));
                //t.setDatee(DateFormat.getDateInstance(obj.get("rate"));
                  //float abonne_id = Float.parseFloat(obj.get("abonne_id").toString());
              //  t.setAbonne_id((int) abonne_id) ;
//                SimpleDateFormat formatter = new SimpleDateFormat("dd/MM/yyyy");
//                 DateFormat daterec;
//                try {
//                    daterec = formatter.parse(obj.get("daterec").toString());
//                    r.setDaterec(daterec);
//                } catch (ParseException ex) {
//                    
//                }
                
//                t.setDatee(DateFormat.getDateInstance(Integer.parseInt(obj.get("datee").toString())));
                tasks.add(t);
            }
            
            
        } catch (IOException ex) {
            
        }
         /*
            A ce niveau on a pu r??cup??rer une liste des t??ches ?? partir
        de la base de donn??es ?? travers un service web
        
        */
        return tasks;
    }
    
    public ArrayList<Reclamation> getAllTasks(){
        String url = Statics.BASE_URL+"/listmob/";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                tasks = parseTasks(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return tasks;
    }
    
    public boolean deleteReview(Reclamation r) {
        String url = Statics.BASE_URL + "/suppmob/" + r.getIdrec();
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200;
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
 public boolean editReview(Reclamation r) {
        String url = Statics.BASE_URL + "/updatemob/" + r.getIdrec()
                +"?description="+r.getDescription()
                + "&field=" + r.getField()
                + "&datee=" + r.getDatee()
                + "&rate=" + r.getRate();
        
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200;
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

        
  

}
